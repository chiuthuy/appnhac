package com.example.appnhac.Adapter;

import android.content.Context;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.appnhac.Activity.PlayNhacActivity;
import com.example.appnhac.Model.Baihat;
import com.example.appnhac.R;

import java.util.ArrayList;

public class PlaynhacAdapter extends RecyclerView.Adapter<PlaynhacAdapter.ViewHolder>{
    Context context;
    ArrayList<Baihat> mangbaihat;

    public PlaynhacAdapter(Context context, ArrayList<Baihat> mangbaihat) {
        this.context = context;
        this.mangbaihat = mangbaihat;
    }

    @NonNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        LayoutInflater inflater=LayoutInflater.from(context);
        View view=inflater.inflate(R.layout.dong_play_bai_hat,parent,false);
        return new ViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHolder holder, int position) {
        Baihat baihat=mangbaihat.get(position);
        holder.txtcasi.setText(baihat.getCasi());
        holder.txtindex.setText(position+1+"");
        holder.txtenbaihat.setText(baihat.getTenbaihat());

    }

    @Override
    public int getItemCount() {
        return mangbaihat.size();
    }

    public class ViewHolder extends RecyclerView.ViewHolder{
        TextView txtcasi,txtenbaihat,txtindex;

        public ViewHolder(@NonNull View itemView) {
            super(itemView);
            txtcasi=itemView.findViewById(R.id.txtplaynhactencasi);
            txtindex=itemView.findViewById(R.id.txtplaynhacindex);
            txtenbaihat=itemView.findViewById(R.id.txtplaynhactenbaihat);
//            itemView.setOnClickListener(new View.OnClickListener() {
//                @Override
//                public void onClick(View view) {
//                    Intent intent=new Intent(context, PlayNhacActivity.class);
//                    intent.putExtra("cakhuc",mangbaihat.get(getPosition()));
//                    context.startActivity(intent);
//                }
//            });
        }
    }
}
